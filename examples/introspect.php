<?php
$d = new Dbus;
$n = $d->createProxy( "im.pidgin.purple.PurpleService", "/im/pidgin/purple/PurpleObject", "org.freedesktop.DBus.Introspectable");
$d = $n->Introspect( false );
echo $d[0];die();
file_put_contents( 'introspect.xml', $d[0] );
?>
