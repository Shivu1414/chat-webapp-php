{include file="templates/header.tpl" title="Twigytech"}
{include file="templates/nav.tpl" }

<div class="container-fluid">
    <div class="chat-box">
        <div class="cancel-btn"><span class="material-symbols-outlined">close</span></div>
        <div class="chat-header">
            <div class="user-id"></div>
            <span class="user-name"></span>
        </div>
        <div class="chat-body" id="chatBody">
        </div>
        <div class="chat-footer">
            <form class="f-send" id="chatForm" method="post" Action="controller/sendMessage.php" enctype="multipart/form-data">
                <input type="text" name="contact" class="not-vis" value="">
                <div class="chat-inp">
                    <input type="text" name="msg" class="inp-box" autocomplete="off" placeholder="Type a message" >
                    <button type="submit" class="send-btn"><span class="material-symbols-outlined send-i">send</span></button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5">
        <table class="table">
            <thead class="bg-dark">
                <tr class="text-center t-bold" style="background-color: transparent">
                    <th class="text-light" style="background-color: transparent" scope="col">Id</th>
                    <th class="text-light" style="background-color: transparent" scope="col">Name</th>
                    <th class="text-light" style="background-color: transparent" scope="col">Contact No</th>
                    <th class="text-light" style="background-color: transparent" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {foreach $users as $user}
                {strip}
                    <tr class="text-center t-bold" style="background-color: {cycle values="#eeeeee,#dddddd"}">
                        <td class="t-color c-id">{$user.id}</td>
                        <td class="t-color c-name">{$user.name|capitalize}</td>
                        <td class="t-color c-contact">{$user.contact}</td>
                        <td style="background-color: transparent">
                            <button class="btn bg-info mr-2 chat-btn open-chat" type="botton">Chat Now</button>
                        </td>
                    </tr>
                {/strip}
                {/foreach}
            </tbody>
        </table>
    </div>
</div>

{include file="templates/footer.tpl" }