<?php if($this->router->class == 'Institucional' && $this->router->method == 'index'){?>
    <ul class="nav masthead-nav">
<?php } else {?>
    <ul class="nav navbar-nav">
<?php } ?>
        <li class="<?php echo ($this->router->class == 'Institucional' && $this->router->method == 'index') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="<?php echo ($this->router->class == 'Institucional' && $this->router->method == 'Empresa') ? 'active' : ''; ?>"><a href="<?php echo base_url('empresa'); ?>">A Empresa</a></li>
        <li class="<?php echo ($this->router->class == 'Institucional' && $this->router->method == 'Servicos') ? 'active' : ''; ?>"><a href="<?php echo base_url('servicos'); ?>">Serviços</a></li>
        <li><a href="<?php echo base_url('trabalhe-conosco'); ?>">Trabalhe Conosco</a></li>
        <li><a href="<?php echo base_url('fale-conosco'); ?>">Fale Conosco</a></li>
    </ul>
