# silverstripe3-hcaptcha

## Introduction

Provides a FormField which allows form to validate for non-bot submissions
using HCAPTCHA service


## Requirements

 * SilverStripe framework 3.1 or newer
 * curl PHP module
 * Requires [spamprotection](http://silverstripe.org/spam-protection-module/) module

## Installation

 * Copy the `hcaptcha` directory into your main SilverStripe webroot
 * Run ?flush=1

This should go in your `mysite/_config/captha.yml`. You can get an free API key at [https://www.hcaptcha.com/](https://www.hcaptcha.com/)

```
FormSpamProtectionExtension:
  default_spam_protector: HcaptchaProtector
HcaptchaField:
  sitekey: 'your-site-key'
  secret: 'your-secret-key'

```

If using on a site requiring a proxy server for outgoing traffic then you can set these additional
options in your `mysite/_config/captcha.yml` by adding. 
```
  proxy_server: "proxy_address"
  proxy_auth: "username:password"
```
