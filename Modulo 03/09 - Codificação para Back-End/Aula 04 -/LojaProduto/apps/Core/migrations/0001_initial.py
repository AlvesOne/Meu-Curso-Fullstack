# Generated by Django 5.0.6 on 2024-05-20 12:18

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Produto',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome', models.CharField(max_length=100)),
                ('valor', models.DecimalField(decimal_places=2, max_digits=6)),
                ('foto', models.ImageField(upload_to='foto_produto/')),
            ],
        ),
    ]
