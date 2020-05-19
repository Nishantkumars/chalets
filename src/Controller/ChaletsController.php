<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chalets Controller
 *
 * @property \App\Model\Table\ChaletsTable $Chalets
 *
 * @method \App\Model\Entity\Chalet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChaletsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $chalets = $this->paginate($this->Chalets);

        $this->set(compact('chalets'));
    }

    /**
     * View method
     *
     * @param string|null $id Chalet id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chalet = $this->Chalets->get($id, [
            'contain' => ['Details', 'Images'],
        ]);

        $this->set('chalet', $chalet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->layout='admin';
        $chalet = $this->Chalets->newEntity();
        if ($this->request->is('post')) {
            $chalet = $this->Chalets->patchEntity($chalet, $this->request->getData());
            if ($this->Chalets->save($chalet)) {
                $this->Flash->success(__('The chalet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chalet could not be saved. Please, try again.'));
        }
        $this->set(compact('chalet'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chalet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chalet = $this->Chalets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chalet = $this->Chalets->patchEntity($chalet, $this->request->getData());
            if ($this->Chalets->save($chalet)) {
                $this->Flash->success(__('The chalet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chalet could not be saved. Please, try again.'));
        }
        $this->set(compact('chalet'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chalet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chalet = $this->Chalets->get($id);
        if ($this->Chalets->delete($chalet)) {
            $this->Flash->success(__('The chalet has been deleted.'));
        } else {
            $this->Flash->error(__('The chalet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function dashboard()
    {
         $this->layout = 'admin';
    } 
}
