<? use yii\helpers\Url;?>

<div class="admin-default-index">
    <h2>Welcome To Admin Site</h2>
    <hr>
    <div class="info">
        <div>
            <h3 style="border: #0a001f solid 1px; padding: 10px">Your project</h3>

            <div class="item">
                <? foreach ($project as $pro) :?>
                <a href="<?= Url::toRoute('/project/'. $pro->id)?>"><?= $pro->id.'. '.$pro->title?></a>
                <br>
                <a href="<?= Url::toRoute('/admin/project/view?id='. $pro->id)?>">Admin view</a>
                <hr>
                <? endforeach?>
            </div>
        </div>
        <div>
            <h3 style="border: #0a001f solid 1px; padding: 10px">Your Message</h3>
            <div class="item">
                <table>
                    <tr>
                        <th class="title-message">Name</th>
                        <th class="title-message">Email</th>
                        <th class="title-message">Message</th>
                    </tr>
                    <? foreach ($message as $mess) :?>
                    <tr>
                        <td class="message" ><?=$mess->name?></td>
                        <td class="message"><?=$mess->email?></td>
                        <td class="message"><?=$mess->message?></td>
                    </tr>
                    <? endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>

