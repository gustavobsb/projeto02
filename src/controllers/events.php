<?php

$events = Agenda::getAgenda();
echo json_encode($events);