<?php
namespace CrudView\View\Widget;

class Basic extends \Cake\View\Widget\Basic {

	public function render(array $data, \Cake\View\Form\ContextInterface $context) {
		if ($data['type'] === 'hidden') {
			return parent::render($data, $context);
		}

		if (empty($data['class'])) {
			$data['class'] = '';
		}

		if (in_array($data['type'], ['text', 'number'])) {
			$data['class'] .= ' form-control';
		}

		return parent::render($data, $context);
	}

}
