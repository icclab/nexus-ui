from django.http import HttpResponse
import os
from django.shortcuts import render
from django.urls import path
from services.views import service_catalog, create_service, service_detail
from instances.views import instance_catalog, create_instance, delete_instance, instance_detail

BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

# DEBUG = True
DEBUG = False
ALLOWED_HOSTS = ['*']
SECRET_KEY = '4l0ngs3cr3tstr1ngw3lln0ts0l0ngw41tn0w1tsl0ng3nouuuugh15'
ROOT_URLCONF = __name__
DATABASES = {
    'default': {'ENGINE': 'django.db.backends.dummy'}
}
# Application definition

INSTALLED_APPS = [
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'widget_tweaks',
]

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': ['/Users/ribr/Documents/elastest-service-manager-dashboard/esmweb-django/templates/'],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
            ],
        },
    },
]
#Cookie Domain
SESSION_ENGINE = 'django.contrib.sessions.backends.signed_cookies'
MIDDLEWARE = [
        'django.middleware.security.SecurityMiddleware',
        'django.contrib.sessions.middleware.SessionMiddleware',
        'django.middleware.common.CommonMiddleware',
        'django.middleware.csrf.CsrfViewMiddleware',
        'django.contrib.auth.middleware.AuthenticationMiddleware',
        'django.contrib.messages.middleware.MessageMiddleware',
        'django.middleware.clickjacking.XFrameOptionsMiddleware',
    ]

def test(request):
    title = 'Tinyapp'
    author = 'Vitor Freitas'
    return render(request, 'tests/login.html', {'title': title, 'author': author})


def welcome(request):
    return render(request, 'welcome.html')


# error views
from django.shortcuts import render_to_response
from django.template import RequestContext
from django.conf.urls import ( handler400, handler403, handler404, handler500 )

# handler400 = 'esm_dashboard.settings.bad_request'
# handler403 = 'settings.permission_denied'
handler400 = 'esm_dashboard.settings.page_not_found'
handler404 = 'esm_dashboard.settings.page_not_found'
handler500 = 'esm_dashboard.settings.page_not_found'
# handler500 = 'esm_dashboard.settings.server_error'


# HTTP Error 400
def bad_request(request):
    response = render_to_response('400.html')
    response.status_code = 400
    return render(request, 'welcome.html')


# HTTP Error 404
def page_not_found(request):
    response = render_to_response('404.html')
    response.status_code = 404
    return response


# HTTP Error 500
def server_error(request):
    response = render_to_response('500.html')
    response.status_code = 500
    return response


urlpatterns = [
    path('',                            welcome,            name='welcome_page'),
    path('catalog',                     service_catalog,    name='service_catalog_page'),
    path('catalog/',                    service_catalog,    name='service_catalog_page'),
    path('catalog/create',              create_service,    name='service_catalog_page'),
    path('catalog/<str:service_id>',    service_detail,     name='service_detail_page'),
    path('catalog/<str:service_id>/',   service_detail,     name='service_detail_page'),

    path('instances',                   instance_catalog,   name='instance_catalog_page'),
    path('instances/',                  instance_catalog,   name='instance_catalog_page'),
    path('instances/delete',            delete_instance,   name='instance_catalog_page'),
    path('instances/create',            create_instance,   name='instance_catalog_page'),
    path('instances/create/<str:parameter>',     create_instance,   name='instance_catalog_page'),
    path('instances/<str:instance_id>',     instance_detail,   name='instance_catalog_page'),

    path('test', test, name='catalogpage')
]

STATIC_URL = '/static/'

# Add these new lines
STATICFILES_DIRS = (
    os.path.join(BASE_DIR, 'static'),
)

STATIC_ROOT = os.path.join(BASE_DIR, 'staticfiles')