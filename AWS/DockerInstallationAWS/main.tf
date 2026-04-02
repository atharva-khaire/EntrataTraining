provider "aws" {
  region = "ap-south-1"   # Mumbai region (free tier supported)
}

resource "aws_instance" "docker_ec2" {
  ami           = "ami-0f58b397bc5c1f2e8" # Amazon Linux 2 (update if needed)
  instance_type = "t2.micro"              # Free tier

  key_name = "atharva-entrata-practise-aws"  # Replace with your key pair

  vpc_security_group_ids = [aws_security_group.docker_sg.id]

  user_data = <<-EOF
              #!/bin/bash
              yum update -y
              yum install -y docker
              systemctl start docker
              systemctl enable docker
              usermod -aG docker ec2-user
              EOF

  tags = {
    Name = "Docker-EC2"
  }
}

resource "aws_security_group" "docker_sg" {
  name = "docker-sg"

  ingress {
    from_port   = 22
    to_port     = 22
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  # Optional: allow web apps
  ingress {
    from_port   = 80
    to_port     = 80
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}