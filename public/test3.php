<?
function foobar() {
print 'foobar - start' . PHP_EOL;

for ($i = 0; $i < 5; $i++) {
print 'foobar - yielding...' . PHP_EOL;
yield $i;
print 'foobar - continued...' . PHP_EOL;
}

print 'foobar - end' . PHP_EOL;
}

$generator = foobar();

print 'Generator created' . PHP_EOL;

while ($generator->valid()) {
print "Getting current value from the generator..." . PHP_EOL;

print $generator->current() . PHP_EOL;

$generator->next();
}