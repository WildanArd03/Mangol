<?php 

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
} 

// function get_time_ago( $time )
// {
//     $time_difference = time() - $time;

//     if( $time_difference < 1 ) { return 'less than 1 second ago'; }
//     $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
//                 30 * 24 * 60 * 60       =>  'month',
//                 24 * 60 * 60            =>  'day',
//                 60 * 60                 =>  'hour',
//                 60                      =>  'minute',
//                 1                       =>  'second'
//     );

//     foreach( $condition as $secs => $str )
//     {
//         $d = $time_difference / $secs;

//         if( $d >= 1 )
//         {
//             $t = round( $d );
//             return  $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
//         }
//     }
// }
?> 
