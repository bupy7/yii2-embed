<?php
use yii\helpers\Html;
/**
 * @var mixed $info Information about page, file and etc.
 */
?>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Property name</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>title</td>
            <td><?= Html::encode($info->title); ?></td>
        </tr>
        <tr>
            <td>description</td>
            <td><?= Html::encode($info->description); ?></td>
        </tr>
        <tr>
            <td>url</td>
            <td><?= Html::encode($info->url); ?></td>
        </tr>
        <tr>
            <td>type</td>
            <td><?= Html::encode($info->type); ?></td>
        </tr>
        <tr>
            <td>images</td>
            <td><?php var_dump($info->images); ?></td>
        </tr>
        <tr>
            <td>image</td>
            <td><?= Html::img($info->image); ?></td>
        </tr>
        <tr>
            <td>imageWidth</td>
            <td><?= $info->imageWidth; ?></td>
        </tr>
        <tr>
            <td>imageHeight</td>
            <td><?= $info->imageHeight; ?></td>
        </tr>
        <tr>
            <td>imageHeight</td>
            <td><?= $info->imageHeight; ?></td>
        </tr>
        <tr>
            <td>code</td>
            <td><?= Html::encode($info->code); ?></td>
        </tr>
        <tr>
            <td>width</td>
            <td><?= Html::encode($info->width); ?></td>
        </tr>
        <tr>
            <td>aspectRatio</td>
            <td><?= Html::encode($info->aspectRatio); ?></td>
        </tr>
        <tr>
            <td>authorName</td>
            <td><?= Html::encode($info->authorName); ?></td>
        </tr>
        <tr>
            <td>authorUrl</td>
            <td><?= Html::encode($info->authorUrl); ?></td>
        </tr>
        <tr>
            <td>providerName</td>
            <td><?= Html::encode($info->providerName); ?></td>
        </tr>
        <tr>
            <td>providerUrl</td>
            <td><?= Html::encode($info->providerUrl); ?></td>
        </tr>
        <tr>
            <td>providerIcons</td>
            <td><?php var_dump($info->providerIcons); ?></td>
        </tr>
        <tr>
            <td>providerIcon</td>
            <td><?= Html::img($info->providerIcon); ?></td>
        </tr>
    </tbody>
</table>

