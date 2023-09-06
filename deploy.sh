#!/bin/bash

DOCKER_APP_NAME=emma-test

cd /home/ec2-user/emma-test

EXIST_CONTAINER=$(docker ps | grep $DOCKER_APP_NAME-main)

if [ -z "$EXIST_CONTAINER" ]; then
	docker-compose -p ${DOCKER_APP_NAME} -f docker-compose.yml -d --build

	echo "Build Complete senior-nutrition-main container"
fi

docker system prune -af
