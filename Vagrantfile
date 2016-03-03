# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure(2) do |config|

    # Parameters
    ip_addr = "192.168.30.100"
    host_os = `uname`

    if host_os =~ /Linux/

        eth  = `ifconfig eth0 | awk '/inet / {split($2,a,":"); print a[2]}'`
        wlan = `ifconfig wlan0 | awk '/inet / {split($2,a,":"); print a[2]}'`

        if eth != ''
            host_ip_address = eth
        else
            host_ip_address = wlan
        end
    end

    if host_os =~ /Darwin/
        eth  = `ifconfig en0 | awk '/inet / {split($2,a,":"); print a[1]}'`
        wlan = `ifconfig en1 | awk '/inet / {split($2,a,":"); print a[1]}'`

        if eth != ''
            host_ip_address = eth
        else
            host_ip_address = wlan
        end
    end

    config.vm.box      = "hashicorp/precise64"
    config.vm.hostname = "dev.phpwarks"

    config.vm.network "private_network", ip: ip_addr
    config.vm.network "forwarded_port", guest: 80, host: 8080

    config.vm.synced_folder "./", "/var/www"

    config.vm.provider "virtualbox" do |vb|
        vb.name = "PHPWarks_Dev"
    end

    config.vm.provision "ansible" do |a|
        a.extra_vars = {
            "host_ip" => host_ip_address, # Used for xdebug config contained within the php.ini.tpl
        }

        a.playbook = 'VagrantProvisions/playbook.yml'

        # Example usage:
        # $ ANSIBLE_TAGS='php' vagrant provision
        # ^ This will run the tasks tagged with `php`
        unless ENV['ANSIBLE_TAGS'].nil?
            a.tags=ENV['ANSIBLE_TAGS']
        end
    end

    config.vm.post_up_message = sprintf("The VM is now ready to use.\n\nPlease ensure that `%s    dev.phpwarks` has been added to your hosts file.\n\nPlease ensure you run `composer up` to ensure all dependancies are installed.", ip_addr)

end
