<?php 

function func() {
    echo "+ Deze code is in func() uitgevoerd.\n"; 
}

echo "- Deze regel is voor de for-lus uitgevoerd.\n";

for ($counter = 1; $counter <= 3; $counter++) {

    echo "= Deze code is in de for-lus.\n";
    echo "  Maar voor de func() uitgevoerd.\n";
    func();
    echo "= Deze code is in de for-lus.\n";
    echo "  Maar na de func() uitgevoerd.\n";
    echo "- Deze code is na de for-lus uitgevoerd.\n";
}
?>