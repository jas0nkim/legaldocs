from django.conf.urls import patterns, include, url
from django.contrib import admin
from tutorials import views

urlpatterns = patterns('',
	url(r'^your-name/', views.get_name),
	url(r'^thanks/', views.thanks),
)
