provider "aws" {
  region = "ap-south-1"
}

resource "aws_db_instance" "rds" {
  allocated_storage   = 20
  engine              = "mysql"
  instance_class      = "db.t3.micro"
  username            = "admin"
  password            = "StrongPass123"
  skip_final_snapshot = true

  tags = {
    Name = "My-RDS"
  }
}