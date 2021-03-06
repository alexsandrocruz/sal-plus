<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Contratos Relacionados</h4>    
    <?php if (!empty($currentModel['Contrato'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                        <th>Situação</th>
                        <th>Número</th>
                        <th>Início</th>
                        <th>Prazo Vigência</th>
                        <th>Número Processo</th>
                        <th>Ano Processo</th>
                        <th>Licitação</th>
                        <th>Empenho</th>
                        <th class="actions">Ações</th>
                </tr>
            </thead>
            <?php foreach ($currentModel['Contrato'] as $contrato): ?>
                <tr>
                    <td data-title="Situação"><?php echo $situacoes[$contrato['situacao_id']];?></td>
                    <td data-title="Número"><?php echo $contrato['numero'];?></td>
                    <td data-title="Início"><?php echo $contrato['dt_inicio'];?></td>
                    <td data-title="Prazo Vigência"><?php echo $contrato['prazo_vigencia'];?></td>
                    <td data-title="Número Processo"><?php echo $contrato['numero_processo'];?></td>
                    <td data-title="Ano Processo"><?php echo $contrato['ano_processo'];?></td>
                    <td data-title="Licitação"><?php echo $licitacoes[$contrato['licitacao_id']];?></td>
                    <td data-title="Empenho"><?php echo $contrato['numero_empenho'];?></td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link("Consultar", array('controller' => 'contratos', 'action' => 'view', $contrato['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Editar", array('controller' => 'contratos', 'action' => 'edit', $contrato['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Excluir", array('controller' => 'contratos', 'action' => 'delete', $contrato['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $contrato['id'])); ?></li>
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
    <?php echo $this->Html->link(__('Novo Contrato', true), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'btn btn-primary'));?> </li>
    </div>
</div>
