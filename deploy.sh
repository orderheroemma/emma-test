#!/bin/bash

DOCKER_APP_NAME=senior-nutrition

cp -rf ~/deployment/* ~/$DOCKER_APP_NAME

cd /home/ec2-user/senior-nutrition

EXIST_CONTAINER=$(docker ps | grep $DOCKER_APP_NAME-main)

if [ -z "$EXIST_CONTAINER" ]; then
	docker-compose -p ${DOCKER_APP_NAME} -f docker-compose.yml -d --build

	echo "Build Complete senior-nutrition-main container"
fi

docker system prune -af
