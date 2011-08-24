<?= $paginator ?>
<table>
     <caption><?= $command ?></caption>
    <thead>
        <tr>
            <td class="column span-1"><input type="checkbox" /></td>
            <td class="column span-2">type</td>
            <td class="">key</td>
            <td class="column span-2 last">actions</td>
        </tr>
    </thead>
    <tbody>
        <?php if ( isset( $keys ) ) : ?>
        <?php foreach ( $keys as $item ) : ?>
        <tr>
            <td><input type="checkbox" id="<?= $item['key'] ?>" /></td>
            <td><?= $item['type'] ?></td>
            <td>
                <?= Helper_Keys::anchorKey( $item['key'], $item['type'] ) ?>
                <?= Helper_Keys::value($item['value']) ?>
            </td>
            <td>
                <?= Helper_Keys::anchorAction( $item['key'], $item['type'], 'delete' ) ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
<?= $paginator ?>
