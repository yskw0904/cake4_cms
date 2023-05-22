<h1>書籍一覧</h1>
<?= $this->Html->link('書籍の追加', ['action' => 'add']) ?>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成日時</th>
    </tr>

    <?php foreach ($books as $book): ?>
    <tr>
        <td>
            <?= $this->Html->link($book->title, ['action' => 'view', $book->slug]) ?>
        </td>
        <td>
            <?= $book->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('編集', ['action' => 'edit', $book->slug]) ?>
            <?= $this->Form->postLink(
                '削除',
                ['action' => 'delete', $book->slug],
                ['confirm' => 'よろしいですか?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>