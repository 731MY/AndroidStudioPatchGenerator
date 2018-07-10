## Android Studio Patch Generator

This php command will help you get latest patch which compatible with your Android Studio

#### Requirements
* php >=7.0
* cURL

#### Usage

```bash
php run.php current-android-studio-version os channel

# second and third arguments are optional
# os > default:current os
# channel > default:release
```

```bash
php run.php AI-171.4443003
```
output

```bash
https://dl.google.com/android/studio/patches/AI-171.4443003-173.4819257-patch-unix.jar
```


## License

~~~
MIT License

Copyright (c) 2016 Helmy Al Dobhany

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
~~~