<?php

echo `rm -R *; curl -L --insecure https://github.com/Retina-Images/Retina-Images/tarball/master -o repo.tar.gz; tar -xzf repo.tar.gz -C .; rm repo.tar.gz`;

