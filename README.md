
# Simple PHP Rest API
Simple Rest API use php and running on FrankenPhp and Php-fpm use Docker. The apis for "Find two lines that together with the x-axis form a container, such that the container contains the most water and return the maximum amount of water a container can store."

## Preview
![Demo](GIF-06.gif)

## How To Run
- docker compose up -d

## How To Off
- docker compose down

## Running
### FrankenPhp
- http://localhost::8020/api/check
### PHP-FPM
- http://localhost::8019/api/check
- 
reference:
https://leetcode.com/problems/container-with-most-water/description/

## TODO
31-12-2024
- config nginx concurent connection more than 1k