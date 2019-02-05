<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Patrimonios Controller
 *
 * @property \App\Model\Table\PatrimoniosTable $Patrimonios
 *
 * @method \App\Model\Entity\Patrimonio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PatrimoniosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $patrimonios = $this->paginate($this->Patrimonios);

        $this->set(compact('patrimonios'));
    }

    /**
     * View method
     *
     * @param string|null $id Patrimonio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patrimonio = $this->Patrimonios->get($id, [
            'contain' => []
        ]);

        $this->set('patrimonio', $patrimonio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patrimonio = $this->Patrimonios->newEntity();
        if ($this->request->is('post')) {
            $patrimonio = $this->Patrimonios->patchEntity($patrimonio, $this->request->getData());
            if ($this->Patrimonios->save($patrimonio)) {
                $this->Flash->success(__('The patrimonio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patrimonio could not be saved. Please, try again.'));
        }
        $this->set(compact('patrimonio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Patrimonio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $patrimonio = $this->Patrimonios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patrimonio = $this->Patrimonios->patchEntity($patrimonio, $this->request->getData());
            if ($this->Patrimonios->save($patrimonio)) {
                $this->Flash->success(__('The patrimonio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patrimonio could not be saved. Please, try again.'));
        }
        $this->set(compact('patrimonio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Patrimonio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patrimonio = $this->Patrimonios->get($id);
        if ($this->Patrimonios->delete($patrimonio)) {
            $this->Flash->success(__('The patrimonio has been deleted.'));
        } else {
            $this->Flash->error(__('The patrimonio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
