<?php 
namespace App\Repositories\Portfolio;

interface PortfolioRepository {

	function getAllPortfolio();

	function getPortfolioById($id);

	function createPortfolio(array $attributes);

	function updatePortfolio($id, array $attributes);

	function deletePortfolio($id);

}
