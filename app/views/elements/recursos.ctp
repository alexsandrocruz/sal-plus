<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Recursos Relacionados</h4>    
    <?php if (!empty($currentModel['Recurso'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">      
            <tr>
                <th>Contrato</th>
                <th>Pessoa</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <?php foreach ($currentModel['Recurso'] as $recurso): ?>
                <tr>
                    <td data-title="Contrato"><?php echo $contratos[$recurso['contrato_id']];?></td>
                    <td data-title="Pessoa"><?php echo $pessoas[$recurso['pessoa_id']];?></td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link("Consultar", array('controller' => 'recursos', 'action' => 'view', $recurso['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Editar", array('controller' => 'recursos', 'action' => 'edit', $recurso['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Excluir", array('controller' => 'recursos', 'action' => 'delete', $recurso['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $recurso['id'])); ?></li>
                          </ul>
                        </div>                        
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>
        </section>
    <?php endif; ?>    
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->             
    <div class="related-actions">
    <?php echo $this->Html->link(__('Novo Recurso', true), array('controller' => 'recursos', 'action' => 'add'),array('class'=>'btn btn-primary'));?> </li>
    </div>
</div>
