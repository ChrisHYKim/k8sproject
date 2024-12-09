#!/bin/bash
# 웹 페이지 확인
while true
do 
   ssh $i " cat /webdata/index.html"
   sleep $INTERVAL
done
