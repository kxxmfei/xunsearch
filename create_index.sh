#!/bin/bash
./xs_sdk/util/Indexer.php --rebuild --source=mysql://root:q19900516@192.168.1.105/sh_article --sql="SELECT `id`,`title`,`desc`,`content` FROM sh_article" --project=test