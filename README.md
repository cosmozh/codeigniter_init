# 1. AWS (EC2 Create)
<pre><code>1. AWS -> EC2 Instance Create</code></pre>
<pre><code>2. Key Pair Create or Choose exist key</code></pre>
<pre><code>3. After Created, Move to Security Group -> Inbound -> Edit -> Add Rule -> 80 port add.</code></pre>
<pre><code>4. If you use windows OS, generate the key using by Putty Keygen.</code></pre>
<pre><code>5. After that, Using putty, Join the server though public ip in EC2 Instance, SSH->Auth ppk key file linked.</code></pre>
<pre><code>6. login as : ubuntu</code></pre>

# 2. Ubuntu (Initial Setting)
### Input below commands for install php, apache2, mysql client to instance.
<pre><code>sudo apt-get update</code></pre>
<pre><code>sudo apt-get dist-upgrade</code></pre>
<pre><code>sudo apt-get install apache2</code></pre>
<pre><code>sudo a2enmod rewrite</code></pre>
<pre><code>sudo service apache2 restart</code></pre>
<pre><code>sudo apt-get install libapache2-mod-php</code></pre>
<pre><code>sudo /etc/init.d/apache2 restart</code></pre>
<pre><code>sudo adduser ubuntu www-data</code></pre>
<pre><code>sudo chown -R www-data:www-data /var/www</code></pre>
<pre><code>sudo chmod -R g+rw /var/www</code></pre>
<pre><code>sudo apt-get install mysql-server</code></pre>
<pre><code>sudo apte-get install php-mysql</code></pre>
<pre><code>sudo apt-get install php-mysql</code></pre>
<pre><code>sudo vim /etc/apache2/apache2.conf</code></pre>
<pre><code>sudo /etc/init.d/apache2 restart</code></pre>

# 3. Password Setting
<pre><code>sudo passwd ubuntu</code></pre>
<pre><code>sudo vi /etc/ssh/sshd_config</code></pre>
Modify : Password Authentication No -> Password Authetication Yes
<pre><code>sudo service sshd restart</code></pre>
<pre><code>sudo chmod -R 777 /var/www/html</code></pre>

# 4. RDS (Database)
<pre><code>1. Created RDS Instace.</code></pre>
<pre><code>2. After Created, Go to Security Group, Ip address change to 0.0.0.0/0</code></pre>
<pre><code>3. Get endpoint(hostname).</code></pre>
