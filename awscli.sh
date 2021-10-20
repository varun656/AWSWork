#!/bin/bash

aws --version
aws ssm put-parameter --name "/codebuild/securityCheck" --type "String" --value "testvalue" --overwrite
aws s3 cp package.json s3://lambdacust007/package.json
