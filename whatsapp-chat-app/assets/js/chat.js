document.addEventListener("DOMContentLoaded", function() {
    const cancelButton = document.querySelector('.cancel-btn');
    const chatBox = document.querySelector('.chat-box');
    const chatButtons = document.querySelectorAll('.open-chat');
    const chatForm = document.getElementById('chatForm');
    const chatBody = document.querySelector('.chat-body');
    let chatInterval = "";
    let scroll = 1;
    
    cancelButton.addEventListener('click', function() {
        chatBox.style.display = 'none';
        chatBody.innerHTML = '';
        clearInterval(chatInterval);
        scroll = 1;
    });

    chatButtons.forEach(function(chatButton) {
        chatButton.addEventListener('click', function(){
            const row = chatButton.closest('tr');
            const userName = row.querySelector('td.c-name').textContent;
            const userId = row.querySelector('td.c-id').textContent;
            const userContact = row.querySelector('td.c-contact').textContent;
            chatBox.querySelector('.user-name').textContent = userName;
            chatBox.querySelector('.user-id').textContent = userId;
            chatBox.querySelector('.not-vis').value = userContact;
            chatBox.style.display = 'block';
            recieveMsgTimely(userContact);
        });
    });

    chatForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(chatForm);
        const phone = formData.get('contact');
        const xhr = new XMLHttpRequest();
        xhr.open('POST', chatForm.action, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                chatForm.querySelector('input[name="msg"]').value = '';
                scroll = 1;
            } else {
                console.error('Error sending message:', xhr.statusText);
            }
        };
        xhr.send(formData);
    });

    function recieveMsgTimely(phone){
        chatInterval = setInterval(()=>{
            receiveMessage(phone);
        },3000);
    }

    function receiveMessage(contact) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'controller/recieveMessage.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        const dataToSend = {
            response: contact
        };
        xhr.onload = function() {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                let runDate = "";
                chatBody.innerHTML = '';
                data.forEach((dataObj)=>{
                    if(dataObj.body){
                        const time = new Date(dataObj.timestamp * 1000);
                        const currentDate = time.toLocaleDateString('en-IN', {day: '2-digit' }).replace(/\//g, '-');
                        const printDate = time.toLocaleDateString('en-IN', { year: 'numeric', month: '2-digit', day: '2-digit' }).replace(/\//g, '-');
                        if(!runDate){
                            runDate = currentDate;
                            var messageDiv = document.createElement('div');
                            messageDiv.className = 'date-div';
                            messageDiv.textContent = printDate;
                            chatBody.appendChild(messageDiv);
                            appendChat(dataObj, time);
                        }
                        else if(runDate != currentDate){
                            runDate = currentDate;
                            var messageDiv = document.createElement('div');
                            messageDiv.className = 'date-div';
                            messageDiv.textContent = printDate;
                            chatBody.appendChild(messageDiv);
                            appendChat(dataObj, time);
                        }
                        else{
                            appendChat(dataObj, time);
                        }
                    }
                })
                if(scroll == 1){
                    scroll = 0;
                    chatBody.scrollTop = chatBody.scrollHeight;
                }
            } else {
                console.error('Error receiving message:', xhr.statusText);
            }
        };
        xhr.send(JSON.stringify(dataToSend));
    }

    function appendChat(dataObj, time){
        const option = { timeZone: 'Asia/Kolkata', hour: '2-digit', minute: '2-digit', hour12: false };
        let istTime = time.toLocaleTimeString('en-IN', option);
        var messageDiv = document.createElement('div');
        messageDiv.className = 's-common';
        if(dataObj.fromMe){
            messageDiv.classList.add('send-me');
            var timeSpan = document.createElement('span');
            timeSpan.className = 'time-chat';
        }
        else{
            messageDiv.classList.add('send-user');
            var timeSpan = document.createElement('span');
            timeSpan.className = 'time-chat-user';
        }
        timeSpan.textContent = istTime;
        messageDiv.textContent = dataObj.body;
        messageDiv.appendChild(timeSpan);
        chatBody.appendChild(messageDiv);
    }

});
