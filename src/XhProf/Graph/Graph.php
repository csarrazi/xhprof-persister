<?php

namespace XhProf\Graph;

class Graph
{
    const ROOT = '__root__';

    private $vertices;
    private $edges;

    /**
     * @return array
     */
    public function getVertices()
    {
        return $this->vertices;
    }

    /**
     * @param $name
     * @return Vertex
     */
    public function getVertex($name)
    {
        return isset($this->vertices[$name]) ? $this->vertices[$name] : null;
    }

    /**
     * @param Vertex $vertex
     * @throws \LogicException
     */
    public function addVertex(Vertex $vertex)
    {
        if (isset($this->vertices[$vertex->getName()])) {
            throw new \LogicException(sprintf('Vertex %s already exists', $vertex->getName()));
        }

        $this->vertices[$vertex->getName()] = $vertex;
    }

    /**
     * @return array
     */
    public function getEdges()
    {
        return $this->edges;
    }

    /**
     * @param Edge $edge
     */
    public function addEdge(Edge $edge)
    {
        $this->edges[] = $edge;
    }
}