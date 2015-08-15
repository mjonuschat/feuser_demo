<?php
namespace MojoCode\FeuserDemo\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * BetController
 */
class BetController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * betRepository
	 *
	 * @var \MojoCode\FeuserDemo\Domain\Repository\BetRepository
	 * @inject
	 */
	protected $betRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$bets = $this->betRepository->findAll();
		$this->view->assign('bets', $bets);
	}

	/**
	 * action show
	 *
	 * @param \MojoCode\FeuserDemo\Domain\Model\Bet $bet
	 * @return void
	 */
	public function showAction(\MojoCode\FeuserDemo\Domain\Model\Bet $bet) {
		$this->view->assign('bet', $bet);
	}

}