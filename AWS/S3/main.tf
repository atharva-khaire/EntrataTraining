provider "aws" {
  region = "ap-south-1"
}

resource "aws_s3_bucket" "bucket" {
  bucket = "atharva-unique-entrata-bucket-123"

  tags = {
    Name = "My-S3-Bucket"
  }
}