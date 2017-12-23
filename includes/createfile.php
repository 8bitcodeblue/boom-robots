<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=robots.txt');
header('Pragma: no-cache');
readfile("robots.txt");
