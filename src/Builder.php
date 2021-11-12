<?php 

namespace Wooletthedevsout\Builder;

use Nette\PhpGenerator\PhpFile;
use Wooletthedevsout\Builder\Types as Create;

class Builder
{
	public $class;

	protected $options;

	public function __construct(string $class, array $options)
	{
		$this->class = $class;
		$this->options = $options;

		$this->build();
	}

	protected function build()
	{
		if(in_array(0, $this->options)) {

			$built = Create::paymentGateway($this->class, $this->options);

		} elseif (in_array(1, $this->options)) {

			$built = Create::shippingMethod($this->class, $this->options);
		
		} elseif (in_array(2, $this->options)) {

			$built = Create::integration($this->class, $this->options);
		
		} elseif (in_array(3, $this->options)) {

			$built = Create::emailType($this->class, $this->options);
		
		} elseif (in_array(4, $this->options)) {

			$built = Create::productType($this->class, $this->options);
		
		} elseif (in_array(5, $this->options)) {

			$built = Create::orderStatus($this->class, $this->options);
		
		}
	}
}