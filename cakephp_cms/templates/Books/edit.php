<h1>書籍の編集</h1>
<?php
    echo $this->Form->create($book);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Book'));
    echo $this->Form->end();
?>