mysqldump -uroot -phello54987663 uh | gzip > /alidata/timmerjob/gagablogdatabase/$(date +%Y-%m-%d_%H%M%S).sql.gz
cd  /alidata/timmerjob/gagablogdatabase/
git add *
git commit -m "back db gagablog" -a
git push -u origin master
rm -f 'find . -name '*.sql.gz' -mtime +10'
/bin/bash /alidata/www/autosubmit_changesbyadmin.sh
