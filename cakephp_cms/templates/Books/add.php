<h1>書籍の追加</h1>
<?php
    echo $this->Form->create($book);
    // TOOD:今はユーザーを直接記述
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Book'));
    echo $this->Form->end();
?>