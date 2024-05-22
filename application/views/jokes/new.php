<?php $this->load->view('partials/header')?>
<?php
    if($this->session->flashdata('messages')) {
?>
            <?= $this->session->flashdata('messages'); ?>
<?php
    }
    if($this->session->flashdata('errors')) {
?>
            <span class="errors"><?= $this->session->flashdata('errors') ?></span>
<?php
    }
?>
            <div class="return">
                <?= $this->session->userdata('return') ?>
            </div>
            <h1>Add your own hilarious IT joke</h1>
            <form class="adjust" action="http://vhedmyr/jokes/index.php/new" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" name="joke_title" class="form-control title-border" id="title" placeholder="Input title">
                    <label for="title">Title</label>
                </div>
                <div class="form-floating">
                    <textarea name="joke_content" class="form-control content" id="content" placeholder="Enter Content"></textarea>
                    <label for="content">Content</label>
                </div>
                <input type="hidden" name="action" value="add_joke">
                <input class="btn btn-primary add-joke" type="submit" value="Add joke">
            </form>

<?php $this->load->view('partials/footer')?>