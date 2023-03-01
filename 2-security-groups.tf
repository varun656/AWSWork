resource "aws_default_security_group" "this" {
  vpc_id = "${aws_vpc.this.id}"

  tags = "${merge(
    local.common_tags,
    map(
      "Name", "get-leap-sagemaker-vpc default vpc security group",
      "Purpose", "Restrict all traffic always - DO NOT USE"
    )
  )}"
}

resource "aws_security_group" "sagemaker_notebook_instance" {
  name        = "get-leap-sagemaker-notebook-instance"
  description = "SageMaker Notebook Instance - egress only"
  vpc_id      = "${aws_vpc.this.id}"

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  tags = "${merge(
    local.common_tags,
    map(
      "Name", "get-leap-sagemaker-notebook-instance",
      "Purpose", "Used to define traffic ingress/egress for notebook instances connected to VPC"
    )
  )}"
}

resource "aws_security_group" "squid_proxy" {
  name        = "get-leap-sagemaker-squid-proxy"
  description = "Squid transparent proxy"
  vpc_id      = "${aws_vpc.this.id}"

  ingress {
    from_port       = 80
    to_port         = 80
    protocol        = "TCP"
    security_groups = ["${aws_security_group.sagemaker_notebook_instance.id}"]
    cidr_blocks     = ["10.1.2.0/24"]
  }

  ingress {
    from_port       = 443
    to_port         = 443
    protocol        = "TCP"
    security_groups = ["${aws_security_group.sagemaker_notebook_instance.id}"]
    cidr_blocks     = ["10.1.2.0/24"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  tags = "${merge(
    local.common_tags,
    map(
      "Name", "get-leap-sagemaker-squid-proxy",
      "Purpose", "Used to define traffic ingress/egress for notebook instances connected to VPC"
    )
  )}"
}

resource "aws_security_group" "emr_access" {
  name        = "get-leap-emr-cluster-access"
  description = "EMR remote access"
  vpc_id      = "${aws_vpc.this.id}"

  ingress {
    from_port       = 22
    to_port         = 22
    protocol        = "TCP"
    security_groups = ["${aws_security_group.sagemaker_notebook_instance.id}"]
  }

  ingress {
    from_port       = 8998
    to_port         = 8998
    protocol        = "TCP"
    security_groups = ["${aws_security_group.sagemaker_notebook_instance.id}"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  tags = "${merge(
    local.common_tags,
    map(
      "Name", "get-leap-emr-cluster-access",
      "Purpose", "Used to define traffic ingress/egress for EMR cluster connected to VPC"
    )
  )}"
}
      "Name", "get-leap-emrnotebook-ElasticMapReduceEditors-Editor",
      "Purpose", "Used to define traffic ingress/egress for EMR notebook connected to VPC"
    )
  )}"
}

resource "aws_security_group" "emr_livy" {
  name        = "get-leap-emrnotebook-ElasticMapReduceEditors-Livy"
  description = "EMR notebook Livy access"
  vpc_id      = "${aws_vpc.this.id}"

  tags = "${merge(
    local.common_tags,
    map(
