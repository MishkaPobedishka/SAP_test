# SAP_test

# SQL

1) SELECT *<br> 
   FROM Cars<br> 
   WHERE Price IN<br> 
      (<br>
      SELECT MAX(Price)<br> 
      FROM Cars<br>
      )
    

2) SELECT c.Id, c.Model, c.Type, c.Price<br>
   FROM Cars c<br>
   INNER JOIN <br>
   (<br>
   SELECT Id, Model, Type, MAX(Price)<br>
   FROM Cars<br>
   GROUP BY Id<br>
   ) b <br>ON a.Id = b.Id AND a.Price = b.Price

# GIT

1) `git clone git@github.com:project_one /var/www/projects`
2) `git cherry-pick 63162ea -e "Новый комментарий"`
3) `git stash save "Наработки"`
4) `(Находясь в текущей ветке) git merge otherFeatures`
5) `git restore filename`