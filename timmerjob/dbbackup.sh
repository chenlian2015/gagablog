cd /alidata/www/default/timmerjob
/alidata/server/mysql-5.5.37/bin/mysqldump -uroot -phello54987663 uh | /bin/gzip > /alidata/www/default/timmerjob/gagablogdatabase/$(date +%Y-%m-%d_%H%M%S).sql.gz
cd  /alidata/www/default/timmerjob/gagablogdatabase/
git add *
git commit -m "back db gagablog" -a
git push -u origin master
rm -f 'find . -name '*.sql.gz' -mtime +10'
/bin/bash /alidata/www/autosubmit_changesbyadmin.sh
