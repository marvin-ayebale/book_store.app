@echo off
echo
echo
echo THIS IS THE STATUS OF THE REPOSITORY
git status
pause
CLS
ECHO ADDING UPDATES
git add .
git add .
pause
CLS
ECHO COMMITING UPDATES
git commit -m "Update by: EGOproject on %date% %time%"
pause
CLS
ECHO PULLING UPDATES MADE ROMOTELY ELSEWHERE
git pull
pause
CLS
ECHO PUSHING YOUR UPDATES TO REMOTE REPO
git push
pause
CLS
echo
echo
echo THIS IS THE STATUS OF THE REPOSITORY
git status
pause
