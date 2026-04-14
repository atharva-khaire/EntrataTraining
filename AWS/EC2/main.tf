provider "aws" {
  region = "ap-south-1"
}

# 🔹 Fetch latest Amazon Linux 2 AMI
data "aws_ami" "amazon_linux" {
  most_recent = true
  owners      = ["amazon"]

  filter {
    name   = "name"
    values = ["amzn2-ami-hvm-*-x86_64-gp2"]
  }
}

# 🔹 Security Group (SSH allowed)
resource "aws_security_group" "ec2_sg" {
  name = "ec2-sg"

  ingress {
    description = "SSH Access"
    from_port   = 22
    to_port     = 22
    protocol    = "tcp"

    # ⚠️ Replace with your IP for security
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

# 🔹 EC2 Instance
resource "aws_instance" "ec2" {
  ami           = data.aws_ami.amazon_linux.id
  instance_type = "t2.micro"
  key_name      = "atharva-entrata-practise-aws"

  vpc_security_group_ids = [aws_security_group.ec2_sg.id]

  # Ensure public IP
  associate_public_ip_address = true

  tags = {
    Name = "EC2-Instance"
  }
}
