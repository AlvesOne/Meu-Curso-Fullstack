# Generated by Django 5.0.6 on 2024-05-10 13:10

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('biblioteca', '0005_alter_livro_editora2'),
    ]

    operations = [
        migrations.AddField(
            model_name='livro',
            name='editora3',
            field=models.CharField(default='Abril', max_length=100),
            preserve_default=False,
        ),
    ]
