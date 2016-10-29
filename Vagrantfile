Vagrant.configure("2") do |config|

  config.vm.define "vstack" do |vm_config|
    vm_config.vm.box = "ubuntu/trusty64"
    vm_config.vm.provider "virtualbox" do |vb|
        vb.memory = "512"
    end

    vm_config.vm.hostname = "vstack"
    vm_config.vm.network :private_network, ip: '10.222.1.2'

    vm_config.vm.provision "ansible" do |ansible|
        ansible.playbook = "playbook_build.yml"
    end
  end

end
