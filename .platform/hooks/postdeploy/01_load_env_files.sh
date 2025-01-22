#!/usr/bin/env bash

if [ ! -f .env ]
then
  export $(cat .env | xargs)
fi

if [ ! -f .env.local ]
then
  export $(cat .env.local | xargs)
fi