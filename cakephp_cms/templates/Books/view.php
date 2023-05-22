<h1><?= h($book->title) ?></h1>
<p><?= h($book->body) ?></p>
<p><small>作成日時: <?= $book->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $book->slug]) ?></p>