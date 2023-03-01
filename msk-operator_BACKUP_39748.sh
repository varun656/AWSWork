#!/bin/sh

<<<<<<< HEAD
Hello moto
=======

New line
>>>>>>> development
cat << EOF
####################################
### Get MSK Environment Details ###
####################################
EOF

aws --version > /dev/null 2>&1 || { echo >&2 "[ERROR] aws is missing. aborting..."; exit 1; }

MSK_CLUSTER_ARN=`aws kafka list-clusters --region us-east-1 |grep -w "ClusterArn" | awk '{print substr($2, 1, length($2)-1)}'|sed -e 's/^"//' -e 's/"$//'`
  echo "msk_cluster_arn is : $MSK_CLUSTER_ARN"

ZOOKEEPER_LIST=`aws kafka describe-cluster --region us-east-1 --cluster-arn $MSK_CLUSTER_ARN | grep -w "ZookeeperConnectString" | awk '{print substr($2, 1, length($2)-1)}'| sed -e 's/^"//' -e 's/"$//' `
  echo "zookeeper_list is : $ZOOKEEPER_LIST"
ZOOKEEPER_LIST_TLS=`aws kafka describe-cluster --region us-east-1 --cluster-arn $MSK_CLUSTER_ARN | grep -w "ZookeeperConnectStringTls" | cut -d ':' -f 2- | awk '{$1=$1};1' | sed -e 's/^"//' -e 's/"$//'`
  echo "zookeeper_list_tls is : $ZOOKEEPER_LIST_TLS"

KAFKA_BROKER1=`aws kafka list-nodes --region us-east-1 --cluster-arn $MSK_CLUSTER_ARN | grep -A1 'Endpoints' | grep -v "Endpoints" | awk 'NR%6==1'|awk '{$1=$1};1'|sed -e 's/^"//' -e 's/"$//'`
  echo "Kafka Broker1 : $KAFKA_BROKER1"
KAFKA_BROKER2=`aws kafka list-nodes --region us-east-1 --cluster-arn $MSK_CLUSTER_ARN | grep -A1 'Endpoints' | grep -v "Endpoints" | awk 'NR%6==3'|awk '{$1=$1};1'|sed -e 's/^"//' -e 's/"$//'`
  echo "Kafka Broker2 : $KAFKA_BROKER2"
KAFKA_BROKER3=`aws kafka list-nodes --region us-east-1 --cluster-arn $MSK_CLUSTER_ARN | grep -A1 'Endpoints' | grep -v "Endpoints" | awk 'NR%6==5'|awk '{$1=$1};1'|sed -e 's/^"//' -e 's/"$//'`
  echo "Kafka Broker2 : $KAFKA_BROKER2"

KAFKA_BROKER_LIST=$KAFKA_BROKER1:9092,$KAFKA_BROKER2:9092,$KAFKA_BROKER3:9092
  echo "Kafka Broker List : $KAFKA_BROKER_LIST"
KAFKA_BROKER_LIST_TLS=$KAFKA_BROKER1:9094,$KAFKA_BROKER2:9094,$KAFKA_BROKER3:9094
  echo "Kafka Broker List TLS: $KAFKA_BROKER_LIST_TLS"

if [ ! -z "${ZOOKEEPER_LIST}" ]; then
	yum install java-1.8.0-openjdk
	curl -L https://archive.apache.org/dist/kafka/2.2.1/kafka_2.12-2.2.1.tgz | tar zxv && cd kafka*
        bin/kafka-topics.sh --create --zookeeper $ZOOKEEPER_LIST --replication-factor 2 --partitions 2 --topic test-run4
else
    echo "[WARN] ZookeeperConnectString is missing. aborting...";
    exit 1; 
fi

if [ ! -z "${KAFKA_BROKER_LIST}" ]; then
        bin/kafka-topics.sh --list --bootstrap-server $KAFKA_BROKER_LIST
else
    echo "[WARN] Kafka Broker List is missing. aborting..."
    exit 1; 
fi

echo "Topic Creation Completed..."
