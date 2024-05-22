<?php $this->load->view('partials/header')?>
<?php
    $session_data = $this->session->userdata('data');
        for($i = 0; $i < count($session_data); $i++) {
            $id = $session_data[$i]['id'];
        }

    $session_count = $this->session->userdata('count');
        for($j = 0; $j < count($session_count); $j++) {
            $count = $session_count[$j]['COUNT(*)'];
        }
?>
            <h1>Jokes List(<?= $count ?>)</h1>
            <a class="new_joke" href="http://vhedmyr/jokes/index.php/jokes/new">Add new joke</a>
<?php
    if($this->session->userdata('jokeslists')) {
?>
            <div>
                <ul class="list-group">
<?php
    foreach($session_data as $data) {
?>
                    <li class="list-group-item"><a href="http://vhedmyr/jokes/index.php/jokes/joke/<?=$data['id']?>"><?=$data['title']?> (<?= $data['created_at'] ?>)</a></li>
<?php
    }
?>
                </ul>
            </div>
<?php
    }
?>
<?php $this->load->view('partials/footer')?>